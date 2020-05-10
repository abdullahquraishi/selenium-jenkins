pipeline {
  agent any
       
  stages {
        
    stage('Cloning Git') {
      steps {
        git 'https://github.com/abdullahquraishi/selenium-jenkins.git'
      }
    }

    stage('composer install') {
      steps {
         bat 'composer install'
      }
    } 

    stage('npm install') {
      steps {
         bat 'npm install'
      }
    }

    stage('integration test') {
      steps {
         bat 'npm test'
      }
    }  

    stage('unit test') {
      steps {
         bat 'vendor/bin/phpunit'
      }
    }      
  }
}