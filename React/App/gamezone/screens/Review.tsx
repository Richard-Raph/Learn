import { globalStyles } from '../styles/Global';
import { View, Text, Button } from 'react-native';

interface NavigationProps {
    navigation: {
        getParam: (params?: object) => void;
    }
}

export default function Review({ navigation }: NavigationProps) {
    return (
        <View style={globalStyles.container}>
            <Text style={globalStyles.titleText}>{ navigation.getParam('title') }</Text>
            <Text style={globalStyles.titleText}>{ navigation.getParam('body') }</Text>
            <Text style={globalStyles.titleText}>{ navigation.getParam('rating') }</Text>
        </View>
    );
}