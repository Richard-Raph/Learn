import { Text, StyleSheet, TouchableOpacity } from 'react-native';

interface TodoItemProps {
    item: {
        key: string;
        text: string;
    };
    pressHandler: (key: string) => void;
}

export default function TodoItem({ item, pressHandler }: TodoItemProps) {
    return (
        <TouchableOpacity onPress={() => pressHandler(item.key)}>
            <Text style={styles.item}>{item.text}</Text>
        </TouchableOpacity>
    );
}

const styles = StyleSheet.create({
    item: {
        padding: 16,
        marginTop: 16,
        borderWidth: 1,
        borderRadius: 10,
        borderColor: '#bbb',
        borderStyle: 'dashed',
    },
});