// K-10-7 1 2
import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import './Packet.css'
import articles from '../fixtures'
import Cyrcle from './Cyrcle'

//import './components/Packet.css'
// K-11-4 2
//function Packet(props){
//K-11-7
class Packet extends React.Component{
	constructor(props){
	super(props);
	let arr=articles[0]["articles"];
	let example=[7,9,11];

	this.state={arr: arr, example: example, error: null,
      isLoaded: false,
      items: []};
	
	}
	
  componentDidMount() {
    fetch("/api/productsValue")
      .then(res => res.json())
      .then(
        (result) => {
          this.setState({
            isLoaded: true,
            items: result.items
          });
        },
        // Примечание: важно обрабатывать ошибки именно здесь, а не в блоке catch(),
        // чтобы не перехватывать исключения из ошибок в самих компонентах.
        (error) => {
          this.setState({
            isLoaded: true,
            error
          });
        }
      )
	}

	
	//;
	render(){
	let arr=this.state.arr;
	function analiz(nameId){
		if (arr[arr.length-1].length==1){
			//return arr[arr.length-1][0] //если адрес уже найден, то он уже внесен в конце массива
		}
		for(let i=0; i<arr.length; i++){
			if(arr[i].id==nameId){
				arr.push([i])
			 return i}
		}
		return arr.length-1  // возврат "нулевого массива" стоящего в конце (если данного id нет в списке)
	}

	    const { error, isLoaded, items } = this.state;
    if (error) {
      var ins= <div>Ошибка: {error.message}</div>;
    } else if (!isLoaded) {
      var ins= <div>Загрузка...</div>;
    } else {
    	var ins="Work!";
    } 
	return (
	<div className="Packet">
		<div className="Packet-data">
			<div>
				<h2>c {ins} {arr[analiz(this.props.id)].meat}  {this.state.example[2]} </h2>
			</div>
			<div className="Packet-dataInsert" />
			<div className="Packet-dataWeight">				
				<p>{arr[analiz(this.props.id)].numberPortion} порций</p>
				<p>{arr[analiz(this.props.id)].mouseText}</p>
				<p>{arr[analiz(this.props.id)].komment}</p>
				
			</div>
		</div>
	<Cyrcle cyrcle={arr[analiz(this.props.id)].weight} cyrcleColor={arr[analiz(this.props.id)].cyrcleColor} />	
	</div>

		)
		}	
}

export default Packet