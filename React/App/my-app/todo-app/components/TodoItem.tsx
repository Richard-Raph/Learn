import { MaterialIcons } from '@expo/vector-icons';
import { View, Text, StyleSheet, TouchableOpacity } from 'react-native';

interface TodoItemProps {
    item: {
        key: string;
        text: string;
    };
    pressHandler: (key: string) => void;
}

export default function TodoItem({ item, pressHandler }: TodoItemProps) {
    return (
        <TouchableOpacity>
            <View style={styles.item}>
                <Text>{item.text}</Text>
                <MaterialIcons
                    size={18}
                    name='delete'
                    color='coral'
                    onPress={() => pressHandler(item.key)}
                    style={StyleSheet.flatten([styles.item, styles.icon])}
                />
            </View>
        </TouchableOpacity>
    );
}

const styles = StyleSheet.create({
    item: {
        padding: 10,
        marginTop: 16,
        borderWidth: 1,
        borderRadius: 10,
        alignItems: 'center',
        flexDirection: 'row',
        borderStyle: 'dashed',
        borderColor: '#bbb',
    },
    icon: {
        padding: 8,
        marginTop: 0,
        marginLeft: 'auto',
    }
});