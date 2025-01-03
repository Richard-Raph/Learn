import { View, Text } from 'react-native';
import { globalStyles } from "../styles/Global";

export default function About() {
    return (
        <View style={globalStyles.container}>
            <Text style={globalStyles.titleText}>About Screen</Text>
        </View>
    );
}