import React from 'react';
import { useState } from 'react';
import { useEffect } from 'react';
import MobileNavbar from './mobileNavbar/MobileNavbar';
import DeskNav from './Nav Bar/DeskNav';

const MyNavbar = () => {
    const [windowSize, setWindowsize] = useState(window.screen.width)

useEffect(()=> {
    window.addEventListener("resize",()=> {
        setWindowsize(window.screen.width);
    })
},[])




    return (
        <div>
            {windowSize > 700 ? <DeskNav/> : <MobileNavbar/>}
        </div>
    );
};

export default MyNavbar;