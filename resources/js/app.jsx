import './bootstrap';

import React from 'react';
import Saludo from "./Pages/Saludo.jsx";

import {createRoot} from "react-dom/client";


const main_element = document.getElementById("root");


const root = createRoot(main_element);

root.render(<Saludo />);
