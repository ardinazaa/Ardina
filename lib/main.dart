// ignore_for_file: use_key_in_widget_constructors, prefer_const_constructors

import 'package:flutter/material.dart';
import 'home.dart';

void main() => runApp(App());

class App extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      // themeMode: ThemeMode.dark,
      theme: ThemeData(
          primaryColor: Color.fromARGB(255, 53, 23, 119),
          scaffoldBackgroundColor: Color.fromARGB(234, 114, 112, 226),
          appBarTheme: AppBarTheme(
              backgroundColor: Color.fromARGB(218, 20, 15, 99), elevation: 0)),
      title: 'Ardina Zahiro',
      initialRoute: '/',
      routes: {
        '/': (context) => Home(),
      },
    );
  }
}
