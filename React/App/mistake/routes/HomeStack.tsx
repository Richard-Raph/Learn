import Home from '../screens/Home';
import Review from '../screens/Review';
import { createStackNavigator } from 'react-navigation-stack';

const screens = {
    Home: {
        screen: Home,
        navigationOptions: { title: 'GameZone' }
    },
    Review: {
        screen: Review,
        navigationOptions: { title: 'Review Details' }
    }
}

const HomeStack = createStackNavigator(screens, {
    defaultNavigationOptions: {
        headerTintColor: '#444',
        headerStyle: { height: 80, backgroundColor: '#eee' }
    }
});

export default HomeStack;