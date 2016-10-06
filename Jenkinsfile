#!/usr/bin/env groovy

currentBuild.result = "SUCCESS"

node {
    try {

        stage 'Running install and tests'

            env.BUILD_COMMAND = "bin/install && bin/test"
    }

    catch (err) {

        currentBuild.result = "FAILURE"

        throw err
    }
}