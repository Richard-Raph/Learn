import { View, Text, StyleSheet } from "react-native";

export default function SandBox() {
    return (
        <View style={styles.container}>
            <Text style={styles.boxOne}>ona</Text>
            <Text style={styles.boxTwo}>two</Text>
            <Text style={styles.boxThree}>three</Text>
            <Text style={styles.boxFour}>four</Text>
        </View>
    )
}

const styles = StyleSheet.create({
    container: {
        flex: 1,
        paddingTop: 40,
        alignItems: 'center',
        flexDirection: 'row',
        justifyContent: 'center',
        backgroundColor: '#ddd',
    },
    boxOne: {
        padding: 10,
        backgroundColor: 'violet',
    },
    boxTwo: {
        padding: 10,
        backgroundColor: 'gold',
    },
    boxThree: {
        padding: 10,
        backgroundColor: 'coral',
    },
    boxFour: {
        padding: 10,
        backgroundColor: 'skyblue',
    },
});