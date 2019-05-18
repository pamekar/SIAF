import gql from 'graphql-tag';

export const queries = {
    user: gql`query {
        user {
            id
            name
            email
            avatar
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
    }`
};