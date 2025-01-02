import { View, Text, StyleSheet } from 'react-native';

export default function HomeScreen() {

    return (
        <View style={styles.container}>
            <Text>Hello World!</Text>
        </View>
    );
}

const styles = StyleSheet.create({
    container: {
        flex: 1,
        backgroundColor: '#fff',
    },
});