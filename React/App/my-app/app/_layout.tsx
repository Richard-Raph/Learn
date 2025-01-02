// import { Stack } from "expo-router";

// export default function RootLayout() {
//   return <Stack screenOptions={{ headerShown: false }}/>;
// }


import { Stack } from 'expo-router';

export default function RootLayout() {
  return (
    <Stack>
      <Stack.Screen name="(tabs)" />
    </Stack>
  );
}
