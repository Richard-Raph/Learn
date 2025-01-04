import { View, Text } from 'react-native';
import { globalStyles } from '../styles/Global';

interface RouteProps {
    route: {
        params: {
            body: string;
            title: string;
            rating: number;
        };
    };
}

export default function Review({ route }: RouteProps) {
    return (
        <View style={globalStyles.container}>
            <Text style={globalStyles.titleText}>{route.params.title}</Text>
            <Text style={globalStyles.titleText}>{route.params.body}</Text>
            <Text style={globalStyles.titleText}>Rating: {route.params.rating}</Text>
        </View>
    );
}