import gql from 'graphql-tag';

export const queries = {
    checkAdmin: gql`query {
        user {
            id
            is_admin
        }
    }`,
    dashboard: gql`query {
        user {
            id
            name
            contributions
            expenses
            pending
            resolved
        }
    }`,
    profile: gql`query {
        user {
            id
            name
            full_name
            email
            phone_no
            linkedin
            instagram
            facebook
            twitter
            avatar
            about
        }
    }`,
    settings: gql`query {
        user {
            id
            name
            first_name
            last_name
            email
            phone_no
            linkedin
            instagram
            facebook
            twitter
            avatar
            about
        }
    }`,
    user: gql`query {
        user {
            id
            name
            email
            avatar
            is_admin
        }
    }`
};