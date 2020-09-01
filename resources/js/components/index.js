import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import App from './App';
//import * as serviceWorker from './serviceWorker';
import {render} from 'react-dom';

if (document.getElementById('example')){
	ReactDOM.render(
	    <App />,
	  document.getElementById('example')
	);	
}

/*function HelloWorld(){
	return (<div><h1>Hello, World</h1></div>)
}

render(<HelloWorld/>, document.getElementById('root'));*/



// If you want your app to work offline and load faster, you can change
// unregister() to register() below. Note this comes with some pitfalls.
// Learn more about service workers: https://bit.ly/CRA-PWA
//serviceWorker.unregister();
