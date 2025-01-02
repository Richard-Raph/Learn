import { useState } from 'react';
import Header from './components/Header';
import { View, Text, StyleSheet, FlatList } from 'react-native';

export default function HomeScreen() {
    const [todos, setTodos] = useState([
        { text: 'buy coffee', key: '1' },
        { text: 'create an app', key: '2' },
        { text: 'play on the switch', key: '3' },
    ]);

    return (
        <View style={styles.container}>
            {/* header */}
            <Header />
            <View style={styles.content}>
                {/* Todo form */}
                <View style={styles.list}>
                    <FlatList
                        data={todos}
                        renderItem={({ item }) => (
                            <Text>{item.text}</Text>
                        )}
                    />
                </View>
            </View>
        </View>
    )
}

const styles = StyleSheet.create({
    container: {
        flex: 1,
        backgroundColor: '#fff',
    },
    content: {
        padding: 40,
    },
    list: {
        marginTop: 20,
    },
})