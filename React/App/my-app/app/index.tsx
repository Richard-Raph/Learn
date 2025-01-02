import { useState } from 'react';
import { View, Text, Button, TextInput, StyleSheet } from 'react-native';

export default function HomeScreen() {
    const [age, setAge] = useState('30');
    const [name, setName] = useState('World');

    // const pressHandler = () => {
    //     setAge('45');
    //     setName('Richie');
    // }

    // const changeName = (names: Array<string>) => {
    //     const randomIndex = Math.floor(Math.random() * names.length);
    //     return names[randomIndex];
    // }

    return (
        <View style={styles.container}>
            <Text>Enter name: </Text>
            <TextInput
                multiline
                style={styles.input}
                placeholder='John Doe'
                onChangeText={(val: string) => setName(val)}
            />
            <Text>Enter Age: </Text>
            <TextInput
                placeholder='99'
                style={styles.input}
                keyboardType='numeric'
                onChangeText={(val) => setAge(val)}
            />
            <Text>Name: {name}, Age: {age}</Text>
            {/* <View style={styles.button}>
                <Button title='Change name' />
            </View> */}
        </View>
    );
}

const styles = StyleSheet.create({
    container: {
        flex: 1,
        alignItems: 'center',
        justifyContent: 'center',
    },
    input: {
        borderWidth: 1,
        borderColor: '#777',
        padding: 8,
        margin: 10,
        width: 200,
    },
    button: {
        marginTop: 20,
    }
});