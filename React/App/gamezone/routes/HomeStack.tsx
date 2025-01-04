import Home from '../screens/Home';
import Review from '../screens/Review';
import { createAppContainer, getActiveChildNavigationOptions } from 'react-navigation';
import { createStackNavigator } from 'react-navigation-stack';

const screens = {
    Home: {
        screen: Home,
        navigationOptions: {
            title: 'Game Zone'
        }
    },
    Review: {
        screen: Review,
        navigationOptions: {
            title: 'Review Details'
        }
    }
}

const HomeStack = createStackNavigator(screens, {
    defaultNavigationOptions: {
        headerTintColor: '#444',
        headerStyle: {
            height: 80,
            backgroundColor: '#eee'
        }
    }
});

export default createAppContainer(HomeStack);