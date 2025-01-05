import About from '../screens/About';
import { createStackNavigator } from 'react-navigation-stack';

const screens = {
    About: {
        screen: About,
        navigationOptions: { title: 'About GameZone' }
    }
}

const AboutStack = createStackNavigator(screens, {
    defaultNavigationOptions: {
        headerTintColor: '#444',
        headerStyle: { height: 80, backgroundColor: '#eee' }
    }
});

export default AboutStack;