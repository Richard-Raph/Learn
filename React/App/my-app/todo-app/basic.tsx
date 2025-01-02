import { useState } from 'react';
import { View, Text, TextInput, StyleSheet, FlatList, TouchableOpacity } from 'react-native';

export default function BasicScreen() {
    const [age, setAge] = useState('30');
    const [name, setName] = useState('World');
    const [people, setPeople] = useState([
        { name: 'Shaun', id: '1' },
        { name: 'Roshi', id: '2' },
        { name: 'Mario', id: '3' },
        { name: 'Luigi', id: '4' },
        { name: 'Peach', id: '5' },
        { name: 'Toady', id: '6' },
        { name: 'Bower', id: '7' },
    ]);

    const pressHandler = (id: string) => {
        console.log(id);
        setPeople(prevPeople => {
            return prevPeople.filter(person => person.id != id);
        })
    }

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

            <FlatList
                data={people}
                numColumns={3}
                keyExtractor={item => item.id}
                renderItem={({ item }) => (
                    <TouchableOpacity onPress={() => pressHandler(item.id)}>
                        <Text style={styles.list}>{item.name}</Text>
                    </TouchableOpacity>
                )}
            />
        </View>
    );
}

const styles = StyleSheet.create({
    container: {
        flex: 1,
        paddingTop: 30,
        paddingHorizontal: 20,
    },
    input: {
        width: 200,
        margin: 10,
        padding: 8,
        borderWidth: 1,
        borderColor: '#777',
    },
    list: {
        padding: 10,
        fontSize: 20,
        marginTop: 20,
        marginHorizontal: 5,
        backgroundColor: 'pink',
    },
});
