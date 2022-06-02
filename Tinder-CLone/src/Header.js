import { IconButton } from '@material-ui/core';
import React from 'react'
import './Header.css';
import {Person}  from '@material-ui/icons'
import PersonIcon from '@mui/icons-material/Person';
function Header() {
  return (
    <div className='header'>
    <IconButton>
    <PersonIcon fontSize='large' className="header_icon"/></IconButton>
    <img className='header_icon' src='https://png2.cleanpng.com/sh/7d22161a59b9ae9beb5b1f373cb538e1/L0KzQYm3VMA4N6lofZH0aYP2gLBuTgRqdpVqip91b3fyPbT2jgB2fJZ3Rdtsb372PbP8jfJtbV5yedDwbz35dbT7jCIuPZJoUNQ7NEi2QLa6gsAvO2oASKIBMkC0RYO6UcAzOmk1SqI5Mz7zfri=/kisspng-tinder-logo-computer-icons-bumble-mango-vector-5ac8b24830e3b0.3990062015231022802003.png'></img>
    </div>
    
  )
}

export default Header