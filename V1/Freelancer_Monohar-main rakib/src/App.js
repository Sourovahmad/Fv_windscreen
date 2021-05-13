import React from 'react'
import {BrowserRouter as Router, Route, Switch} from "react-router-dom"
import './App.css';
import Footer from './Components/Footer/Footer';
import MyNavbar from './Components/MyNavbar/MyNavbar';
import Appointment from './Pages/appointment/Appointment';
import Home from './Pages/Home/Home';
import OptConfirm from './Pages/Login_Releted/OptConfirm';
import SignIn from './Pages/Login_Releted/SignIn';
import SignUp from './Pages/Login_Releted/SignUp';
import Offer from './Pages/Offer/Offer';
import RecentBlog from './Pages/RecentBlog/RecentBlog';
import Refer from './Pages/Refer/Refer';

function App() {
  return (
    <Router>
      <MyNavbar/>
      <Switch>
        <Route exact path="/">
          <Home/>
        </Route>
        <Route exact path="/blog">
          <RecentBlog/>
        </Route>
        <Route exact path="/login">
          <SignIn/>
        </Route>
        <Route exact path="/register">
          <SignUp/>
        </Route>
        <Route exact path="/confirm">
          <OptConfirm/>
        </Route>
        <Route exact path="/refer">
          <Refer/>
        </Route>
        <Route exact path="/offer">
          <Offer/>
        </Route>
        <Route exact path="/review">
          <Appointment/>
        </Route>

       

       



      </Switch>
      <Footer/>
    </Router>
  );
}

export default App;
