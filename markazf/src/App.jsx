import React from "react";
import { Routes, Route } from "react-router-dom";
import Home from "./Pages/Home";
import Navbar from "./Layouts/Navbar";
import Footer from "./Layouts/Footer";
import Qabul from './Pages/Qabul';

export default function App() {
  return (
    <>
      <Navbar />
      <Routes>
        <Route index path="/" element={<Home />} />
        <Route path="/qabul" element={<Qabul />} />
      </Routes>
      <Footer />
    </>
  );
}
