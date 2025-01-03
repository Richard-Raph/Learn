import { View, Text } from 'react-native';
import { globalStyles } from "../styles/Global";

export default function Review() {
    return (
        <View style={globalStyles.container}>
            <Text style={globalStyles.titleText}>Review Screen</Text>
        </View>
    );
}