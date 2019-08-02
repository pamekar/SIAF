import gql from 'graphql-tag';

export const mutations = {
    createComplaint: gql`mutation(
        $id: ID!
        $title: String
        $description: String
        $type: String
        $state: String
        $location: String
        $tags: String
        $anonymous: Boolean
        $public: Boolean
    ){
        createComplaint(
            id: $id
            title: $title
            description: $description
            type: $type
            state: $state
            location: $location
            tags: $tags
            anonymous: $anonymous
            public: $public
        ){
            id
            title
            description
            type
            state
            location
            tags
            anonymous
            public
        }
    }`,
    updateUser:      gql`mutation (
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
    updateEmail:     gql`mutation (
        $email: String
    ) {
        updateEmail(
            email: $email
        ) {
            email
        }
    }`,
    updateName:      gql`mutation (
        $name: String
    ) {
        updateName(
            name: $name
        ) {
            name
        }
    }`,
    updatePassword:  gql`mutation (
        $current_password: String
        $new_password: String
        $new_password_confirmation: String
    ){
        updatePassword(
            current_password: $current_password
            new_password: $new_password
            new_password_confirmation: $new_password_confirmation
        ) {
            status
        }
    }
    `
};