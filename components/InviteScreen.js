
import React from 'react';
import { StyleSheet, Text, View, Image, TouchableOpacity } from 'react-native';


export default class InviteScreen extends React.Component {
    render() {
        const time = this.props.navigation.getParam('time');
        const date = this.props.navigation.getParam('date');
        return (
            <View style={styles.container}>
                <View style={styles.detailsCont}>
                    <Text>Lemongrass Thai Restaurant</Text>
                    <Text>{time} - {date}</Text>
                </View>
                <View style={styles.guestCont}>
                    <View style={styles.avatarCont}>
                        <Image style={styles.image} source={require('../assets/pic1.jpg')}></Image>
                        <View style={styles.numCont}>
                            <Text style={styles.name}>Muhammad I</Text>
                            <Text style={styles.num}>111-111-1111</Text>
                        </View>
                    </View>
                    <View style={styles.avatarCont}>
                        <Image style={styles.image} source={require('../assets/pic1.jpg')}></Image>
                        <View style={styles.numCont}>
                            <Text style={styles.name}>Muhammad II</Text>
                            <Text style={styles.num}>222-222-2222</Text>
                        </View>
                    </View>
                    <View style={styles.avatarCont}>
                        <Image style={styles.image} source={require('../assets/pic1.jpg')}></Image>
                        <View style={styles.numCont}>
                            <Text style={styles.name}>Muhammad III</Text>
                            <Text style={styles.num}>333-333-3333</Text>
                        </View>
                    </View>
                </View>
            </View>
        )
    }
}

const styles = StyleSheet.create({
    container: {
        flex: 1,
        backgroundColor: "white"
    },
    image: {
        flex: 2,
        width: 120,
        height: 120,
        margin: 4
    },
    detailsCont: {
        flex: 1,
        backgroundColor: "teal",
        justifyContent: 'center',
        alignItems: 'center'
    },
    guestCont: {
        flex: 3
    },
    numCont: {
        flexDirection: 'column',
        flex: 3
    },
    num: {
        fontSize: 20
    },
    name: {
        fontSize: 27
    },
    avatarCont: {
        margin: 5,
        backgroundColor: "skyblue",
        flex: 1,
        flexDirection: 'row'
    }
})