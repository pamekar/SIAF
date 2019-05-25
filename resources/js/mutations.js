import gql from 'graphql-tag';

export const mutations = {
    updateUser: gql`mutation (
        $id: ID!
        $first_name: String
        $last_name: String
        $phone_no: String
        $linkedin: String
        $instagram: String
        $facebook: String
        $twitter: String
        $avatar: String
        $about: String
    ) {
        updateUser(
            id: $id
            first_name: $first_name
            last_name: $last_name
            phone_no: $phone_no
            linkedin: $linkedin
            instagram: $instagram
            facebook: $facebook
            twitter: $twitter
            avatar: $avatar
            about: $about
        ) {
            id
            first_name
            last_name
            phone_no
            linkedin
            instagram
            facebook
            twitter
            avatar
            about
        }
    }`,
    updateEmail: gql`mutation (
        $id: ID!
        $email: String
    ) {
        updateEmail(
            id: $id
            email: $email
        ) {
            id
            email
        }
    }`,
    updateName: gql`mutation (
        $id: ID!
        $name: String
    ) {
        updateName(
            id: $id
            name: $name
        ) {
            id
            name
        }
    }`,
    updatePassword:gql`mutation (
        $current_password: String
        $new_password: String
        $new_password_confirmation: String
    ){
        updatePassword(
            current_password: $current_password
            new_password: $new_password
            new_password_confirmation: $new_password_confirmation
        ) {
            first_name
        }
    }
    `
};