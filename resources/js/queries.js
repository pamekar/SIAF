import gql from 'graphql-tag';

export const queries = {
    checkAdmin: gql`query {
        user {
            id
            is_admin
        }
    }`,
    complaint: gql`query Complaint($id: ID!){
      complaint(id: $id) {
        id
        user {
            full_name
        }
        title
        description
        type
        state
        location
        tags
        status
        anonymous
        show_remarks
        remark {
            description
        }
        occurred_date
        created_date
        updated_date
        view_count
      }
    }

    
    `,
    complaints: gql`query Complaints($count: Int!, $page: Int, $orderBy: [OrderByClause!]){
      complaints(count: $count, page: $page, orderBy: $orderBy) {
        paginatorInfo {
          count
          currentPage
          lastPage
          perPage
          total
        }
        data {
          id
          title
          summary
          type
          status
          updated_on
          view_count
        }
      }
    }
`,
    dashboard:  gql`query {
        user {
            id
            name
            contributions
            expenses
            pending
            resolved
        }
    }`,
    profile:    gql`query {
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
    settings:   gql`query {
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
    user:       gql`query {
        user {
            id
            name
            email
            avatar
            is_admin
        }
    }`
};