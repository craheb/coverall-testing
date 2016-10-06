#!/usr/bin/env groovy

currentBuild.result = "SUCCESS"

node {
    try {

        stage 'Run tests in Docker'

            env.BUILD_COMMAND = "vendor/bin/phpunit tests"
    }

    catch (err) {

        currentBuild.result = "FAILURE"

        throw err
    }
}