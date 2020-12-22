import React from 'react';
import { StyleSheet, Text, View, Image, TouchableOpacity } from 'react-native';

export default class SplashScreen extends React.Component {
    render() {
      return (
        <View style={styles.container}>
          <View style={styles.imgCont}>
            <Image source={require('../assets/Illustration.png')}>
            </Image>
          </View>
          <View style={styles.nameCont}>
              <Text style={styles.text}>DinDin</Text>
              <Text>Connecting Food Lovers</Text>
          </View>
          <View style={styles.btnCont}>
            <TouchableOpacity onPress={() => this.props.navigation.navigate('Login')} style={styles.button}>
              <Image source={require('../assets/getStarted.png')}></Image>
            </TouchableOpacity>
          </View>
        </View>
      );
    }
  }
  
  const styles = StyleSheet.create({
    container: {
      flex: 1,
      backgroundColor: '#fff',
      alignItems: 'center',
      justifyContent: 'center',
    },
    text: {
      fontSize: 30,
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
    btnCont: {
      flex: 1,
      backgroundColor: '#fff',
      alignItems: 'center',
      justifyContent: 'center',
    },
    image: {
      height: 200,
      width: 200
    },
    button: {
      flex: 1,
      width: 400,
      alignItems: 'center',
      
    }
  });
  