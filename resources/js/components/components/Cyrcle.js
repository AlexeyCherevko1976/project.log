// K-10-7 1 2
import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import './Cyrcle.css'

//import './components/Packet.css'
// K-11-4 2
function Cyrcle(props){

const packets={background: props.cyrcleColor};
return (
	<div className="Cyrcle" style={packets}>
		<div className="Cyrcle-title">
			{props.cyrcle} 
		</div>
		<div className="Cyrcle-mera">
			кг
		</div>
	</div>
		)
}

export default Cyrcle