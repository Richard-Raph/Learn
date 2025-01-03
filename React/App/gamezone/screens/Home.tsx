import { useState } from 'react';
import { globalStyles } from '../styles/Global';
import { View, Text, Button } from 'react-native';

interface NavigationProps {
    navigation: {
        navigate: (screen: string) => void;
    };
}

export default function Home({ navigation }: NavigationProps) {
    const [reviews, setReviews] = useState([
        { title: 'Zelda, Breath of Fresh Air', rating: 5, body: 'lorem ipsum', key: '1' },
        { title: 'Gotta Catch Them All (again)', rating: 4, body: 'lorem ipsum', key: '2' },
        { title: 'Not so "Final" Fantasy', rating: 3, body: 'lorem ipsum', key: '3' },
    ]);
    
    const pressHandler = () => {
        navigation.navigate('Review');
    }

    return (
        <View style={globalStyles.container}>
            <Text style={globalStyles.titleText}>Home Screen</Text>
            <Button title='Go To Review' onPress={pressHandler} />
        </View>
    );
}