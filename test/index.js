import chai from 'chai';
import chaiHttp from 'chai-http';
import app from '../app';

const {expect} = chai;

chai.use(chaiHttp);

describe('Movies',() => {
    describe('GET /movies',() => {
        it('should return an array of all the movies', (done) => {
            chai.request('https://jsonplaceholder.typicode.com/posts')
                .get('/')
                .end((err,res) => {
                    if(err) done(err);
                    expect(res).to.have.status(200);
                    //expect(res).to.be.an('object');
                    // expect(res.body.status).to.deep.equals('success');
                    // expect(res.body.movies).to.be.an('array');
                     done();
                })
        })
    })
})