import { globalStyles } from '../styles/Global';
import { View, Text, Button } from 'react-native';

interface NavigationProps {
    navigation: (goBack: Function) => void;
}

export default function Review({ navigation }: NavigationProps) {

    const pressHandler = () => {
        navigation.goBack();
    }

    return (
        <View style={globalStyles.container}>
            <Text style={globalStyles.titleText}>Review Screen</Text>
            <Button title='Back To Home' onPress={pressHandler} />
        </View>
    );
}