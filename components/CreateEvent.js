import React from 'react';
import { StyleSheet, Text, View, Image, TouchableOpacity, TimePickerAndroid, DatePickerAndroid } from 'react-native';
import { Constants, MapView, Location, Permissions } from 'expo';


export default class CreateEvent extends React.Component {
  constructor(props) {
    super(props)
    this.state= {
      text: "DinDin",
      androidDate: "Please select a date",
      chosenAndroidTime: "Please select a time"
    }
  }
  setDateAndroid = async () => {
    try {
      const {
        action, year, month, day,
      } = await DatePickerAndroid.open({
      date: new Date(),
      minDate: new Date(),
      });
      if (action !== DatePickerAndroid.dismissedAction) {
        this.setState({ androidDate: `${month + 1}/${day}/${year}` });
      }
    } catch ({ code, message }) {
      console.warn('Cannot open date picker', message);
    }
  };
  setTimeAndroid = async () => {
    try {
      const { action, hour, minute } = await TimePickerAndroid.open({
        hour: 0,
        minute: 0,
        is24Hour: false, // Will display '2 PM'
      });
      if (action !== TimePickerAndroid.dismissedAction) {
        // Selected hour (0-23), minute (0-59)
        const m = (minute < 10) ? `0${minute}` : minute;
        const end = (hour > 12) ? `PM` : `AM`
        let h = hour % 12;
        h = (h < 10) ? `0${h}` : h;
        console.log(`time: ${hour}:${minute}`);
        this.setState({ chosenAndroidTime: `${h}:${m} ${end}` });
      }
    } catch ({ code, message }) {
      console.warn('Cannot open time picker', message);
    }
  }
    render() {
      return (
        <View style={styles.container}>
          <View style={styles.topCont}>
            <TouchableOpacity style={styles.btnDate} onPress={ () => this.setDateAndroid()}><Text>{this.state.androidDate}</Text></TouchableOpacity>
            <TouchableOpacity style={styles.btnTime} onPress={ () => this.setTimeAndroid()}><Text>{this.state.chosenAndroidTime}</Text></TouchableOpacity>
          </View>
          <View style={styles.mapCont}>
            <MapView style={{flex: 1}}
              initialRegion={{
                latitude: 38.0293059,
                longitude: -78.4766781,
                latitudeDelta: 0.0922,
                longitudeDelta: 0.0421,
              }}></MapView>
          </View>
          <TouchableOpacity style={styles.btnInvite} onPress={() => this.props.navigation.navigate('Invite', {date: this.state.androidDate, time: this.state.chosenAndroidTime})}>
              <Text style={{color: "white"}}>Send Invitations</Text>
          </TouchableOpacity>
        </View>
      );
    }
  }
  
  const styles = StyleSheet.create({
    container: {
      flex: 1,
      backgroundColor: '#fff',
    },
    topCont: {
      flex: 3,
      backgroundColor: "#fff"
    },
    text: {
      flex: 1,
      fontSize: 30,
      color: "orange",
      backgroundColor: "blue" 
    },
    mapCont: {
      backgroundColor: "black",
      flex: 8
    },
    btnDate: {
      flex: 1,
      backgroundColor: 'orange',
      alignItems: 'center',
      justifyContent: 'center',
      borderRadius: 50,
      margin: 5
    },
    btnInvite: {
      flex: 1,
      backgroundColor: 'skyblue',
      alignItems: 'center',
      justifyContent: 'center',
      borderRadius: 50,
      margin: 5
    },
    btnTime: {
      flex: 1,
      backgroundColor: 'orange',
      alignItems: 'center',
      justifyContent: 'center',
      borderRadius: 50,
      margin: 5
    },
    button: {
      flex: 1,
      width: 400,
      alignItems: 'center',
      
    }
  });
  