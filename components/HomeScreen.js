import React from 'react';
import { StyleSheet, Text, View, Image, TouchableOpacity } from 'react-native';

export default class HomeScreen extends React.Component {
    constructor(props) {
      super(props);
      this.state = {
        accept: false,
        decline: false,
        appear: true
      }
    }
    appear() {
      this.setState({
        appear: false
      })
    }
    accept() {
      this.setState({
        accept: true,
        decline: false,
      })
      setTimeout(() => {
        this.setState({
          appear: false
        })
      }, 1000)
    }
    decline() {
      this.setState({
        accept: false,
        decline: true
      })
      setTimeout(() => {
        this.setState({
          appear: false
        })
      }, 1000)
    }
    render() {
      return (
        <View style={styles.container}>
          <View style={styles.txtCont}>
            <Text style={styles.text}>Pending Invitations</Text>
          </View>
          { this.state.appear ?
            <TouchableOpacity onPress={ () => this.props.navigation.navigate("Detail")} style={
              this.state.accept ? styles.ticketContGreen : this.state.decline ? styles.ticketContRed : styles.ticketCont
            }>
                <Image style={styles.image} source={require('../assets/pic1.jpg')}></Image>
                <Text style={styles.deets}>Lemongrass, 14th Street</Text>
                <Text style={styles.deets}>Sat 20 April - 8:00pm</Text>
                <Text style={styles.deets}>Hosted by Mr. Anderson</Text>
                <View style={styles.btnCont}>
                    <TouchableOpacity onPress={ () => this.accept()} style={styles.accBtn}><Image style={{flex: 1}} source={require('../assets/accept.png')}></Image></TouchableOpacity>
                    <TouchableOpacity onPress={ () => this.decline()} style={styles.decBtn}><Image style={{flex: 1}} source={require('../assets/decline.png')}></Image></TouchableOpacity>
                </View>
            </TouchableOpacity>
            : <View style={styles.txtCont}>
                <Text style={styles.text}>No More Invitations</Text>
              </View>
          }
          <View style={styles.txtCont}>
            <Text style={styles.text}>End of Invitations</Text>
          </View>
          <View style={styles.btnCont1}>
            <TouchableOpacity onPress={() => this.props.navigation.navigate('Create')} style={styles.button}>
              <Text stlye={styles.text}>Create an Event</Text>
            </TouchableOpacity>
          </View>
          <View style={styles.nameCont}>
              <Text style={styles.text}>DinDin</Text>
              <Text>Connecting Foodies</Text>
          </View>
        </View>
      );
    }
  }
  
  const styles = StyleSheet.create({
    container: {
      flex: 1,
      backgroundColor: '#fff',
      justifyContent: 'center',
    },
    txtCont: {
      flex: 1,
      alignItems: 'center',
      justifyContent:'center',
      backgroundColor: 'skyblue',
      margin: 4
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
    text: {
      fontSize: 30,
    },
    deets: {
      flex: .75,
      color: 'crimson'
    },
    btnCont: {
      flexDirection: 'row',
      height: 50
    },

    ticketCont: {
      borderRadius: 20,
      margin: 7,
      backgroundColor: "#ecf0f1",
      alignItems: 'center',
      flex: 4,
    },
    ticketContGreen: {
      borderRadius: 20,
      margin: 7,
      backgroundColor: "green",
      alignItems: 'center',
      flex: 4,
    },
    ticketContRed: {
      borderRadius: 20,
      margin: 7,
      backgroundColor: "red",
      alignItems: 'center',
      flex: 4,
    },

    imgCont: {
      flex: 7,
      backgroundColor: '#fff',
      alignItems: 'center',
      justifyContent: 'center',
    },
    nameCont: {
      flex: 6,
      backgroundColor: '#fff',
      alignItems: 'center',
      justifyContent: 'center',
    },
    btnCont1: {
      flex: 1,
      backgroundColor: 'teal',
      alignItems: 'center',
      justifyContent: 'center',
    },
    image: {
      flex: 2,
      borderRadius: 400,
      height: 100,
      width: 100
    },
    image1: {
      height: 200,
      width: 200
    },
    button: {
      flex: 1,
      width: 400,
      alignItems: 'center',
      
    }
  });
  