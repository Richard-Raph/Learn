import Home from './screens/Home';
import { useEffect } from 'react';
import * as SplashScreen from 'expo-splash-screen';
import { Nunito_700Bold, Nunito_400Regular, useFonts } from '@expo-google-fonts/nunito';

SplashScreen.preventAutoHideAsync();

export default function App() {
  const [loaded, error] = useFonts({
    Nunito_700Bold,
    Nunito_400Regular,
  });

  useEffect(() => {
    if (loaded || error) {
      SplashScreen.hideAsync();
    }
  }, [loaded, error]);

  if (!loaded && !error) {
    return null;
  }

  return (
    <Home />
  );
}