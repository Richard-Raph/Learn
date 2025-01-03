import { useState } from 'react';
import Header from '../components/Header';
import AddTodo from '../components/AddTodo';
import TodoItem from '../components/TodoItem';
import { View, Alert, StyleSheet, FlatList, Keyboard, TouchableWithoutFeedback } from 'react-native';

export default function HomeScreen() {
    const [todos, setTodos] = useState([
        { text: 'Buy coffee', key: '1' },
        { text: 'Create an app', key: '2' },
        { text: 'Play on the switch', key: '3' },
    ]);

    const pressHandler = (key: string) => {
        setTodos(prevTodos => {
            return prevTodos.filter(todo => todo.key != key);
        });
    };

    const submitHandler = (text: string) => {
        if (text.length > 3) {
            const formattedText = text.charAt(0).toUpperCase() + text.slice(1);

            setTodos(prevTodos => {
                return [
                    { text: formattedText, key: Math.random().toString() },
                    ...prevTodos
                ];
            });
        } else {
            Alert.alert('OOPS! 😮', 'Todos must be over 3 characters long', [
                { text: 'Understood', onPress: () => console.log('alert closed') }
            ]);
        }
    };

    return (
        <TouchableWithoutFeedback onPress={() => Keyboard.dismiss()}>
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
        </TouchableWithoutFeedback>
    );
}

const styles = StyleSheet.create({
    container: {
        flex: 1,
        backgroundColor: '#fff',
    },
    content: {
        flex: 1,
        padding: 40,
    },
    list: {
        flex: 1,
        marginTop: 20,
    }
});