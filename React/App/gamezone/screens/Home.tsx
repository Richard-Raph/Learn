import { useState } from 'react';
import { globalStyles } from '../styles/Global';
import { View, Text, Button } from 'react-native';

interface NavigationProps {
    navigation: (navigate: Function) => void;
}

export default function Home({ navigation }: NavigationProps) {
    const [reviews, setReviews] = useState([
        { title: '', rating: 5, body: '', key: '1' }
    ]);
    
    const pressHandler = () => {
        navigation.navigate('Review');
        // navigation.push('Review');
    }

    return (
        <View style={globalStyles.container}>
            <Text style={globalStyles.titleText}>Home Screen</Text>
            <Button title='Go To Review' onPress={pressHandler} />
        </View>
    );
}