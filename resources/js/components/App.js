import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import './App.css'
import Packet from './components/Packet'
import articles from './fixtures'


function App() {
  return (
  <div>
    <div className="App-header">
        Ты сегодня покормил кота?
    </div>
    <div className="App-kats">
        <Packet id="0" />
        <Packet id="1" />
        <Packet id="2" />
        
    </div>
  </div>
  );

  
}

export default App
