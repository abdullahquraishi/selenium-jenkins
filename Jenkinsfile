pipeline {
  agent any
    
  tools {nodejs "node-test"}
    
  stages {
        
    stage('Cloning Git') {
      steps {
        git 'https://github.com/abdullahquraishi/selenium-jenkins.git'
      }
    }
        
    stage('Install dependencies') {
      steps {
        sh 'npm install'
      }
    }
     
    stage('Test') {
      steps {
         sh 'npm test'
      }
    }      
  }
}