class Addition extends React.Component {
    constructor(props){
        super(props);

        this.state = {
            num1: 1,
            num2: 1,
            score: 0,
            response: "",
            incorrect: false
        }
    }

    render(){
        if(this.state.score < 5){
            return this.renderQuestion();
        }else{
            return this.renderWin();
        }
    }
    renderQuestion = () => {
        return (
            <div>
                <h1 className={this.state.incorrect ? 'incorrect' : ''}>{this.state.num1} + {this.state.num2}</h1>
                <input onKeyPress={this.inputKeyPress} onChange={this.updateResponse} value={this.state.response} />
                <div>
                    Score: {this.state.score}
                </div>
            </div>
        );
    }

    renderWin = () => {
        return (
            <div>
                <h1>Congratulation!!! You win!</h1>
            </div>
        );
    };

    updateResponse = (event) => {
        this.setState({
            response: event.target.value
        });
    };

    inputKeyPress = (event) => {
        if(event.key === 'Enter'){
            if(this.state.num1 + this.state.num2 === parseInt(this.state.response)){
                this.setState(state => ({
                    score: state.score + 1,
                    response: "",
                    incorrect: false,
                    num1: parseInt(Math.random() * 10),
                    num2: parseInt(Math.random() * 10),
                }))
            }else{
                this.setState({
                    incorrect: true,
                    response: ""
                });
            }
        }
    };

    getStyle = () => {
        return this.state.correct ? 'color:black' : 'color:red';
    };
}