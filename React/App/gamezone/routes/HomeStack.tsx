import Home from '../screens/Home';
import Review from '../screens/Review';
import { createAppContainer } from 'react-navigation';
import { createStackNavigator } from 'react-navigation-stack';

const screens = {
    Home: {
        screen: Home
    },
    Review: {
        screen: Review
    }
}

const HomeStack = createStackNavigator(screens);

export default createAppContainer(HomeStack);