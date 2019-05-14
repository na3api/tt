class Tasks extends React.Component {
    constructor(props){
        super(props);

        this.state = {
            tasks: [{
                name: 'Make sendwiches'
            }],
            task: ''
        }
    }

    render(){
        return (
            <div>
                <Navbar />
                <h1>Tasks</h1>
                <ul>
                    {this.createList()}
                </ul>
                <p>
                    Number of tasks: {this.state.tasks.length}
                </p>
                <input value={this.state.task} onChange={this.setTask}/>
                <button onClick={this.addTask}>Add Task</button>
            </div>
        );
    }

    createList = () => {
        var tasks = [];

        for(let index in this.state.tasks){
            tasks.push(<li key={index}><button data-index={index} onClick={this.complitedTask}>\/</button> {this.state.tasks[index].name}</li>)
        }

        return tasks;
    };

    setTask = (event) => {
        this.setState({
            task: event.target.value
        })
    };

    addTask = () => {
        this.setState(state => ({
            tasks: [...state.tasks, {name: state.task}],
            task: ''
        }))
    };

    complitedTask = (event) => {
        const index = event.target.dataset.index;

        this.setState(state => {
            const tasks = [...state.tasks];
            tasks.splice(index, 1);

            return {
                tasks: tasks
            };
        });
    };
}