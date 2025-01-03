import { useState } from 'react';
import { View, Alert, Button, TextInput, StyleSheet } from 'react-native';

interface AddTodoProps {
    submitHandler: (text: string) => void;
}

export default function AddTodo({ submitHandler }: AddTodoProps) {
    const [text, setText] = useState('');
    const [isFocused, setIsFocused] = useState(false);

    const changeHandler = (val: string) => setText(val);

    const handleAddTodo = () => {
        if (text.trim()) {
            submitHandler(text);
            if (text.length > 3) {
                setText('');
            }
        } else {
            Alert.alert('NICE! 🤦🏽‍♂️', 'Please enter a valid todo', [
                { text: 'Understood', onPress: () => console.log('alert closed') }
            ]);
        }
    };

    return (
        <View>
            <TextInput
                value={text}
                placeholder='New Todo...'
                onChangeText={changeHandler}
                onFocus={() => setIsFocused(true)}
                onBlur={() => setIsFocused(false)}
                style={StyleSheet.flatten([styles.input, isFocused && styles.inputFocused])}
            />
            <Button
                color='coral'
                title='Add Todo'
                onPress={handleAddTodo}
            />
        </View>
    );
}

const styles = StyleSheet.create({
    input: {
        marginBottom: 10,
        paddingVertical: 6,
        borderBottomWidth: 1,
        paddingHorizontal: 8,
        borderBottomColor: '#ddd',
    },
    inputFocused: {
        borderBottomColor: 'coral',
    }
});