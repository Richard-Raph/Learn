import { useState } from 'react';
import Header from './components/Header';
import TodoItem from './components/TodoItem';
import { View, StyleSheet, FlatList } from 'react-native';
import AddTodo from './components/AddTodo';

export default function HomeScreen() {
    const [todos, setTodos] = useState([
        { text: 'buy coffee', key: '1' },
        { text: 'create an app', key: '2' },
        { text: 'play on the switch', key: '3' },
    ]);

    const pressHandler = (key: string) => {
        setTodos(prevTodos => {
            return prevTodos.filter(todo => todo.key != key);
        });
    }

    const submitHandler = (text: string) => {
        setTodos(prevTodos => {
            return [
                { text: text, key: Math.random().toString() },
                ...prevTodos
            ];
        });
    }

    return (
        <View style={styles.container}>
            <Header />
            <View style={styles.content}>
                <AddTodo submitHandler={submitHandler} />
                <View style={styles.list}>
                    <FlatList
                        data={todos}
                        renderItem={({ item }) => (
                            <TodoItem item={item} pressHandler={pressHandler} />
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