import React, { useState } from "react";
import "./MobileNavbar.css";
import navbarFavLogo from "../../../images/favlogo.png"
import navbarTextLogo from "../../../images/text-logo.png"
import { Link } from "react-router-dom";

const MobileNavbar = () => {
    const [isSerchOption , setIsSearchOption] = useState(false)
    const [isNavbarItemShow, setIsNavbarItemShow] = useState(false)




    return (
        <div id="mobile-navbar">
            <div className="row align-items-center top-items">
                <div className="col-2">
                    <div className="humbarger-icon">{!isSerchOption ? <i onClick={()=> setIsNavbarItemShow(true)} class="fas fa-bars p-3 rounded-circle fa-2x"></i> : <i onClick={() => setIsSearchOption(false)} class="fas fa-times p-3 rounded-circle fa-2x"></i>}</div>
                </div>

                <div className="col-8">
                    <div className="navbar-logo">
                        <img src={navbarFavLogo} className="img-fluid fav-logo p-2" alt="" />
                        <img src={navbarTextLogo} className="img-fluid text-logo p-2" alt="" />
                    </div>
                </div>

                <div className="col-2 User-badge">{!isSerchOption ? <i class="fas fa-user p-2 rounded-circle fa-2x"></i> : <i class="fas fa-search p-2 rounded-circle fa-2x"></i>}</div>
            </div>

            <div className="input-area">
                <div className="p-2">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="fas fa-search"></i>
                        </span>
                        <input onClick={() => setIsSearchOption(true)} type="text" class="form-control" placeholder="Search Service" aria-label="Username" aria-describedby="basic-addon1" />
                    </div>
                    {isSerchOption && (
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fas fa-map-marker-alt"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Location" aria-label="Username" aria-describedby="basic-addon1" />
                        </div>
                    )}
                </div>
            </div>

            <div className={isNavbarItemShow ? "navbar-list-item show" : "navbar-list-item hide"}>
                <ul>
                    <div className="navbar-items">
                        <li className="item">
                            <Link to="/">Home</Link>
                            <hr />
                        </li>
                        <li className="item">
                            <Link to="/offer">Offer</Link>
                            <hr />
                        </li>
                        <li className="item">
                            <Link to="/review">Appointment</Link>
                            <hr />
                        </li>
                        <li className="item">
                            <Link to="/blog">Blog</Link>
                            <hr />
                        </li>
                        <li className="item">
                            <Link to="/refer">Refer</Link>
                            <hr />
                        </li>
                    </div>
                    <i onClick={()=> setIsNavbarItemShow(false)} class="cancel-icon fas fa-times p-2 rounded-circle fa-2x"></i>
                </ul>
            </div>
        </div>
    );
};

export default MobileNavbar;
