import axios from 'axios'

class Twitter extends React.Component {
    constructor(props){
        super(props);

        axios.get('/service/content-doc-generator/documents/get').than(response => {
            console.log(response);
        })
    }
    render(){
        return (
            <div>
                <h1>Tweets</h1>
                <table className="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Text</th>
                        <th scope="col">link</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        );
    }
}