import React from 'react';
import { StyleSheet, Text, View, Image, TouchableOpacity } from 'react-native';
import { Constants, MapView, Location, Permissions } from 'expo';


export default class HomeScreen extends React.Component {
    state = {
        mapRegion: null,
        hasLocationPermissions: false,
        locationResult: null,
        markers: null,
        lemongrass: {
            latitude: 38.0382146,
            longitude: -78.5042099,
            title: "Lemongrass Thai and Japanese Restaurant",
            description: "Best goddamn food in all of Cville" 
        }
      };
    
      componentDidMount() {
        this.getLocationAsync();
      }
    
      _handleMapRegionChange = mapRegion => {
        console.log(mapRegion);
        this.setState({ mapRegion });
      };
    
      async getLocationAsync (){
       let { status } = await Permissions.askAsync(Permissions.LOCATION);
       if (status !== 'granted') {
         this.setState({
           locationResult: 'Permission to access location was denied',
         });
       } else {
         this.setState({ hasLocationPermissions: true });
       }
    
       let location = await Location.getCurrentPositionAsync({});
       this.setState({ locationResult: JSON.stringify(location) });
       
       // Center the map on the location we just fetched.
        this.setState({mapRegion: { latitude: location.coords.latitude, longitude: location.coords.longitude, latitudeDelta: 0.0122, longitudeDelta: 0.0221 }});
        this.setState(
            {
                markers: {
                    lat: location.coords.latitude,
                    lng: location.coords.longitude,
                    title: "Lambeth",
                    subtitle: "Lambeth Field Residences"
                }
            }
        )
      }
    
      render() {
        return (
          <View style={styles.container}>
            {
              this.state.locationResult === null ?
              <Text style={styles.paragraph}>Finding your current location...</Text> :
              this.state.hasLocationPermissions === false ?
                <Text style={styles.paragraph}>Location permissions are not granted.</Text> :
                this.state.mapRegion === null ?
                <Text style={styles.paragraph}>Map region doesn't exist.</Text> :
                <View>
                    <View style={styles.ticketCont}>
                        <Image style={styles.image} source={require('../assets/pic1.jpg')}></Image>
                        <Text style={styles.deets}>Lemongrass, 14th Street</Text>
                        <Text style={styles.deets}>Sat 20 April - 8:00pm</Text>
                        <Text style={styles.deets}>Hosted by Mr. Anderson</Text>
                        <View style={styles.btnCont}>
                            <TouchableOpacity onPress={() => this.props.navigation.navigate('Home')} style={styles.accBtn}><Image style={{flex: 1}} source={require('../assets/accept.png')}></Image></TouchableOpacity>
                            <TouchableOpacity onPress={() => this.props.navigation.navigate('Home')} style={styles.decBtn}><Image style={{flex: 1}} source={require('../assets/decline.png')}></Image></TouchableOpacity>
                        </View>
                    </View>
                    <View style={styles.mapCont}>
                        <MapView style={styles.map} annotations={this.state.markers} region={this.state.mapRegion}>
                            <MapView.Marker coordinate={{latitude: this.state.mapRegion.latitude, longitude: this.state.mapRegion.longitude}} title={"You are here"} description={"Lambeth Field Residence Area"}>
                                <Image style={{height: 30, width: 20}} source={require('../assets/here.png')}></Image>
                            </MapView.Marker>
                            <MapView.Marker coordinate={{latitude: this.state.lemongrass.latitude, longitude: this.state.lemongrass.longitude}} title={this.state.lemongrass.title} description={this.state.lemongrass.description}></MapView.Marker>
                        </MapView>
                    </View>
                </View>
            }
          </View>
        );
      }
  }
  
  const styles = StyleSheet.create({
    container: {
      flex: 1,
      alignItems: 'center',
      justifyContent: 'center',
      paddingTop: Constants.statusBarHeight,
      backgroundColor: 'grey',
    },
    deets: {
        flex: .75,
        color: 'crimson'
    },
    ticketCont: {
        borderRadius: 20,
        margin: 7,
        backgroundColor: "#ecf0f1",
        alignItems: 'center',
        flex: 2,
    },
    image: {
        flex: 2,
        borderRadius: 400,
        height: 100,
        width: 100
    },
    accBtn: {
        margin: 5,
        borderRadius: 25,
        flex: 1,
        backgroundColor: "#ecf0f1",
        alignItems: 'center'
    },
    decBtn: {
        margin: 5,
        borderRadius: 25,
        flex: 1,
        backgroundColor: "#ecf0f1",
        alignItems: 'center'
    },
    btnCont: {
        flexDirection: 'row',
        height: 50
    },
    paragraph: {
        flex: 2,
        margin: 24,
        fontSize: 18,
        fontWeight: 'bold',
        textAlign: 'center',
        color: '#34495e',
    },
    mapCont: {
        flex: 3,
    },
    map: {
        flex: 1,
        width: 300
    }
  });
  