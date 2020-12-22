import React from 'react';
import {createDrawerNavigator, createAppContainer, createStackNavigator} from 'react-navigation';
import SplashScreen from './components/SplashScreen';
import HomeScreen from './components/HomeScreen';
import Login from './components/Login';
import DetailScreen from './components/DetailScreen';
import CreateEvent from './components/CreateEvent';
import InviteScreen from './components/InviteScreen'

const RootStack = createStackNavigator({
  Splash: SplashScreen,
  Home: HomeScreen,
  Login: Login,
  Detail: DetailScreen,
  Create: CreateEvent,
  Invite: InviteScreen
},
  {
    initialRouteName: 'Splash',
  }
);
const AppContainer = createAppContainer(RootStack)

export default class App extends React.Component {
  
  render() {
    return (
      <AppContainer />
    )
  }
}
