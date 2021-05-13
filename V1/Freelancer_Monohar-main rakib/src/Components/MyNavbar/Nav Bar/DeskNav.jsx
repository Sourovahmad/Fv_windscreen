import React from 'react';
import "./nav.css"
import logo from "../../../images/favlogo.png"
import { Link } from 'react-router-dom';





const DeskNav = () => {
    return (
        <div>
             <nav>
        <div className="logo"><a href="#"><img src={logo} alt=""/></a></div>


                    <div className="search-bar">
                        <select name="" id="">
                            <option value="DelhiNCR" selected>Delhi NCR</option>
                            <option value="DelhiNCR" selected>Delhi NCR</option>
                            <option value="DelhiNCR" selected>Delhi NCR</option>
                            <option value="DelhiNCR" selected>Delhi NCR</option>
                            <option value="DelhiNCR" selected>Delhi NCR</option>
                        </select>
                        <input type="text" placeholder="Search for service"/>
                        <i className="fas fa-search"></i>
                    </div>

        <div className="menue-items">
            <ul className="drop-down">
                <li><Link to="/">Home</Link></li>
                <li><Link to="/offer">Offer</Link></li>
                <li><Link to="/review">Appointment</Link></li>
                <li><Link to="/blog">Blog</Link></li>
                <li><Link to="/refer">Refer</Link></li>
                <li><Link to="login"><button>Login/Signup</button></Link></li>
            </ul>
        </div>
    </nav>
        </div>
    );
};

export default DeskNav;