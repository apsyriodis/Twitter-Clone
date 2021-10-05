pipeline {
    agent any

    stages {
        stage("test") {
            steps {
                //   sh 'git pull'
                //   sh 'docker login'
                  sh 'docker build -t apsyriodis/laravel:254f5fb4 .'
                //   sh 'docker image push apsyriodis/laravel:254f5fb4'
                //   sh 'cd ..'
                //   sh 'cd kubernetes'
                //'access and edit file'
                //   sh 'kubectl apply -f .'
                //   sh 'git push'
                //   echo 'success'
             }
        }
    }

    post {  
         success {  
             mail bcc: '', body: "Project: ${env.JOB_NAME} <br>Build Number: ${env.BUILD_NUMBER} <br> Build Status: Succeed <br> Build URL: ${env.BUILD_URL}", cc: '', charset: 'UTF-8', from: '', mimeType: 'text/html', replyTo: '', subject: "Project: ${env.JOB_NAME} - Succeed, ", to: "apsyriodis@gmail.com";  
         }  
         failure {  
             mail bcc: '', body: "Project: ${env.JOB_NAME} <br>Build Number: ${env.BUILD_NUMBER} <br> Build Status: Failed <br> Build URL: ${env.BUILD_URL}", cc: '', charset: 'UTF-8', from: '', mimeType: 'text/html', replyTo: '', subject: "Project: ${env.JOB_NAME} - Failed, ", to: "apsyriodis@gmail.com";  
         }
     }  
} 
