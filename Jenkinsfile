pipeline {
  agent any
       
  stages {
        
    stage('Cloning Git') {
      steps {
        git 'https://github.com/abdullahquraishi/selenium-jenkins.git'
      }
    }

    stage('Test') {
      steps {
         sh 'composer install'
      }
    }      
  }
}